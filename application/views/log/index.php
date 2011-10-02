<!DOCTYPE html>
<html>
<head>
<title><?php echo __('Log viewer') ?></title>
<?php echo HTML::script('static/js/jquery-1.6.2.js') ?>
<?php echo HTML::script('static/js/jquery.tmpl.js') ?>
<?php echo HTML::script('static/js/jquery-ui-1.8.16.custom.min.js') ?>
<?php echo HTML::style('static/css/cupertino/jquery-ui-1.8.16.custom.css') ?>
<style>
    body { font-size: 62.5%; }
    label, input { display:block; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .log-viewer-table{
        width: 100%;
    }
    .viewer{
        height: 150px;
        overflow-y: scroll;
    }
</style>

<script id="dialogTemplate" type="text/x-jquery-tmpl">
    <div class="topPanel" style="text-align: right"></div>
    <div><table class="log-viewer-table ui-widget ui-widget-content">'
            <tr class="ui-widget-header">
                <th>ID</th><th>Name</th><th>Date Time</th><th>Change</th>
            </tr>
        </table>
    </div>
    <div class="viewer">
        <table class="log-viewer-table ui-widget ui-widget-content"></table>
    </div>
    <div class="bottomPanel"></div>
    <div style="float:right; margin: 10px 20px 0 0;">
        <span class="number">0</span> from <span class="numberAll">0</span>
    </div>
</script>

<script type="text/javascript">

var settings = {
    logUrl: '<?php echo URL::site('log/get') ?>',
    exportUrl: '<?php echo URL::site('log/export') ?>'
};

var LogDialog = (function(){

    return function(name){

        var me = this;

        //Init dialog
        var $dialog = $('<div title="'+name+'"></div>');
        $('#dialogTemplate')
            .tmpl()
            .appendTo($dialog);

        $dialog.find('.log-viewer-table th:eq(0)').width(30);
        $dialog.find('.log-viewer-table th:eq(1)').width(200);
        $dialog.find('.log-viewer-table th:eq(2)').width(200);

        //Export button
        $('<button>Export</button>')
            .button()
            .bind('click', function(){
                document.location.href = settings.exportUrl;
            })
            .appendTo($dialog.find('.topPanel'));

        //Show more button
        $('<button class="showMore">Show more</button>')
            .button()
            .css('float', 'left')
            .appendTo($dialog.find('.bottomPanel'));

        /**
         * Adds callback for "Show More"
         *
         * @param {function} fn callback for "Show More"
         */
        this.setCallback = function(fn){
            $dialog.find('.showMore').bind('click', fn);
        }

        /**
         * Set numbers for pager
         *
         * @param n count of download records
         * @param all count of all records
         */
        this.setNumber = function(n, all){
            $dialog.find('.number').html(n);
            $dialog.find('.numberAll').html(all);
        }

        /**
         * Append row to grid
         *
         * @param {object} data
         */
        this.appendRow = function(data){

            var row = '<tr><td>${id}</td><td>${name}</td><td>${ts}</td><td>${delta}</td></tr>';

            $.tmpl(row, {
                'id': data.id,
                'name': data.name,
                'ts': data.ts,
                'delta': data.old_value+' &rarr; '+data.new_value
            }).appendTo($dialog.find('.viewer table'));

            $dialog.find('.viewer table td:eq(0)').width(30);
            $dialog.find('.viewer table td:eq(1)').width(200);
            $dialog.find('.viewer table td:eq(2)').width(200);
        };

        /**
         * Append rows to grid
         *
         * @param {array} data
         */
        this.appendRows = function(data){
                data.forEach(function(row){
                me.appendRow(row);
            })
        };

        /**
         * Scroll grid to bottom
         */
        this.scrollBottom = function(){

            $dialog.find('.viewer')
                .animate({
                    'scrollTop': $dialog.find('.viewer table').height()
                },1000, 'linear');
        }

        /**
         * Create dialog
         */
        this.show = function(){
            $dialog.dialog({
                width: '600px'
            });
        };
    }
})();

/**
 * Model for log
 */
var LogModel = {
        /**
         * Gets fields list
         */
        getFields: function(){
            return {
                'id': {
                    'label': 'ID',
                    'width': 30
                },
                'name': {
                    'label': 'ID',
                    'width': 200
                },
                'timestamp': {
                    'label': 'Timestamp',
                    'width': 200
                },
                'delta': {
                    'label': 'Changes'
                }
            }
        },
        /**
         * Load data
         * @param params
         * @param fn
         */
        getData: function(params, fn){
            $.getJSON(settings.logUrl, function(data){
                fn(data);
            });
        }
   
};

$(function(){
    
    $('#show_dialog').bind('click', function(event){
        
        var dialog = new LogDialog('Capacity bucket :: Quota change log');
        
        var load = function(){
            LogModel.getData({}, function(data){
                dialog.appendRows(data.data);
                dialog.setNumber(data.cnt, data.all);
                dialog.scrollBottom();
                event.preventDefault();
            });
        }
        
        dialog.setCallback(function(){
            load();
        });
        load();
        dialog.show();
    });

});
</script>
</head>
<body>
<a href="#" id="show_dialog"><?php echo __('Show dialog') ?></a>
</body>
</html>