 var mysql= require('mysql');
 var con= mysql.createConnection({
 	host:"localhost", user:"lalaandrea10", password:"root", database:"REDES"
 });
 con.connect(function (err){
 	if (err)throw err;
 	console.log("Connected");
 	var sql="CREATE TABLE mensajes(name VARCHAR(255), address VARCHAR(255))";
 	con.query(sql,function(err,result){
 		if(err) throw err;
 		console.log("Table creada");
 	});
 });

 
