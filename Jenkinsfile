pipeline {
    agent any 
    stages {
        stage('Build') { 
            steps {
                // echo "build"
		sh "apt-get install php7.3 php7.3-cli php7.3-common php7.3-json php7.3-opcache php7.3-mysql php7.3-mbstring php7.3-mcrypt php7.3-zip php7.3-fpm php7.3-xml"
		sh "composer install --no-interaction" 
            }
        }
        stage('Test') { 
            steps {
                // 
		echo "Test"
		sh "./vendor/bin/phpunit"
            }
        }
        stage('Deploy') { 
            steps {
                // 
		echo "Deploy"
            }
        }
    }
}
