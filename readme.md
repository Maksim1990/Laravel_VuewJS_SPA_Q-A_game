**HOT TO INSTALL APP**
--
     
* *Copy ``.env`` environment config file and set all required settings in it:*

    cp .env.dist .env
     
* *Start app and build required Docker containers:*

        docker-compose up -d
      
* *Install all composer dependencies:*

        docker exec -it quizgame_php composer install
            
* *Run all required migrations:*

        docker exec -it quizgame_php php artisan migrate
  
* *Run all required migrations:*

      docker exec -it quizgame_php  npm install
      docker exec -it quizgame_php  npm run dev
      
* *Change permission for 'storage' folder:*
    
        docker exec -it quizgame_php  chmod +x ./services/docker/set_storage_read_write_permissions.sh
        docker exec -it quizgame_php  ./services/docker/set_storage_read_write_permissions.sh

App is available on ``8304`` port
--
    http://127.0.0.1:8304
