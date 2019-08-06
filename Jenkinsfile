pipeline{
  agent any
  stages{
    stage('Build'){
      steps{
        bat "composer install --no-interaction"
        bat "composer require --dev symfony/phpunit-bridge --no-interaction"
        bat '"C:\Program Files (x86)\7-Zip\7z.exe" a -r target/project.zip -w ./*'
      }
    }
    stage('Test'){
      steps{
        bat "php bin/phpunit"
      }
    }
  }
}
