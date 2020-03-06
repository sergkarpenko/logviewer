pipeline {
  agent any
  stages {
    stage('build') {
      steps {
        echo 'wewewe'
      }
    }

    stage('quality') {
      parallel {
        stage('quality') {
          steps {
            echo 'Test'
          }
        }

        stage('sleep') {
          steps {
            sleep 10
          }
        }

      }
    }

    stage('deploy') {
      steps {
        pwd(tmp: true)
        echo 'qqwwq'
      }
    }

  }
  environment {
    ENV_TYP = 'development'
  }
}