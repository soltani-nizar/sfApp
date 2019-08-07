pipeline{
  agent any
  tools {
    maven 'Maven 3.6.1'
    jdk 'JDK 12.0.2'
  }
  stages{
    stage('Build'){
      steps{
        bat "composer install --no-interaction"
        bat "composer require --dev symfony/phpunit-bridge --no-interaction"
        bat '"C:/Program Files (x86)/7-Zip/7z.exe" a -r target/project.zip -w ./*'
      }
    }
    stage('Test'){
      steps{
        bat "php bin/phpunit"
      }
    }
    stage('Nexus'){
      steps{
        bat 'mvn deploy:deploy-file -DgroupId=sf.apps -DartifactId=sfApp -Dversion=2.0 -DgeneratePom=false -Dpackaging=zip -DrepositoryId=nexus_app -Durl=http://localhost:8081/repository/nexus_app/ -Dfile=target/project.zip'
      }
    }
  }
}
