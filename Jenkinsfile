pipeline {
  agent {
    dockerfile {
      filename 'GCdockerfile'
    }

  }
  stages {
    stage('Testing') {
      steps {
        sh 'Test'
      }
    }

  }
}