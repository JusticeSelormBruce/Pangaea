
const http = require("http");
const express = require("express");
const app = express();
const cors = require("cors");
const redis = require("redis");
require("dotenv").config();  
//get port from env file
const { NODE_SERVER_PORT } = process.env; 
 
app.use(express.json());

// initialise  subscriber 
const subscriber = redis.createClient();
//subscribe to general channel

subscriber.subscribe("general");

//listen to  message sent from laravel service 
subscriber.on("message", function (channel, data) {
 console.log(data);

}

const server = http.createServer(app);
//subscribe to general channel 


server.listen(NODE_SERVER_PORT, function () {
    console.log("server is running.");
});
