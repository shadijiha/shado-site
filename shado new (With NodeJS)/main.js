/**
 * Main entry point for Shado site
 */

const express = require("express");
const app = express();
const serv = require("http").Server(app);
const fetch = require("node-fetch");

// Establish route
const PORT = 8000;
app.get("/", (req, res) => {
	res.sendFile(__dirname + "/shado.html");
});
app.use("/", express.static(__dirname + "/"));

serv.listen(PORT);
console.log("Server is listening to " + PORT);
