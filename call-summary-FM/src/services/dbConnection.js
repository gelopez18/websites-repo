import { orderList } from "../Classes/Sales-Summary.js";

const mysql = require('mysql');
export class DbConnection{
    constructor(){
        let conn = mysql.createConnection({
            host:"localhost",
            user:"fpan004",
            password:"22443"
        });
        conn.connect(function(err) {
          if (err) throw err;
          console.log("Connected!");
        });
    }
}
