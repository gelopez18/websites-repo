const express = require("express");
const app = express();
  
app.get("/currency_convertion", (req, res) => {
  res.send("This is a get request!!\n");
});
  
app.get("/amortization", (req, res) => {
  res.send("This is a get request to '/hey'!!\n");
});

app.get("/tax_calculator", (req, res) => {
    res.send("This is a get request to '/hey'!!\n");
  });
  
app.listen(3000);