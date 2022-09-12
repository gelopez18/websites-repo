import { navBar } from "../UI/nav-bar.js";
let express = require('express');
let app = express();

export default class applicationBase{
    constructor(title){
        this.title = title;
        this.navBar = new navBar();
        this.defaultRout = null;
        this.routMap = {};
    }
    show(element){
        this.navBar.appendToElement(element);
    }
}