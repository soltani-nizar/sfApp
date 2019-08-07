pipeline{
  agent any
  stages{
    stage('Build'){
      steps{
        bat "composer install --no-interaction"
        bat "composer require --dev symfony/phpunit-bridge"
      }
    }
    stage('Test'){
      steps{
        bat "php bin/phpunit"
      }
    }
    stage('SonarQube'){
      steps{
        echo "=== Starting SonarQube Analysis ==="
        bat '"C:/Program Files (x86)/sonar-scanner-4.0.0.1744-windows/bin" sonar-scanner'
        echo "=== Ending SonarQube Analysis ==="
      }
    }
  }
}
