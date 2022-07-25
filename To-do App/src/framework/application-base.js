import { NavBar } from "../UI/Nav-Bar.js";

export default class ApplicationBase{
    constructor(title){
        this.title=title;
        this.NavBar = new NavBar(this.title);
    }
    show(element){
        this.NavBar.appendToElement(element);
    }
}