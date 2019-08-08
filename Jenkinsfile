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
        withSonarQubeEnv('SonarQube v7.9.1')
                        {bat 'sonar-scanner'}
        echo "=== Ending SonarQube Analysis ==="
      }
    }
  }
}
