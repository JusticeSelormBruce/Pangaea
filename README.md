Publish/subscribe system using redis;communicate between laravel and node services



The laravel application located in the directory PUBLISHER is the publisher application and its running on port 8000

  its publishes a msg to the endpoint  http://127.0.0.1:8000/api/publish
   with sample body {  "msg": "HELLO" } with response  
   [
    {
        "msg": "HELLO",
        "updated_at": "2021-09-27T09:40:21.000000Z",
        "created_at": "2021-09-27T09:40:21.000000Z",
        "id": 1
    }
] 



The Redis folder contains the redis server files to get the redis server started if not already running 
executing the redis-sever.exe file should start the redis server on windows

While the subscriber runs on a nodejs application locaated in the dir Subscriber  and its running on port 9000


subscribes  to published topic from the laravel application on port 9000 configued in the .eenv file in the Subscriber dir.


  
