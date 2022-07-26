import { NavBar } from "../UI/Nav-Bar.js";


export default class ApplicationBase{
    constructor(title){
        this.title=title;
        this.NavBar = new NavBar(this.title);
        this.routeMap= {};
        this.defaultRoute=null;
    }
    activateRoute(){
        let content = this.NavBar.element.find('.page-content');
        content.empty();
        this.routeMap[route].appendToElement(content);
    }
    addRoute(id, page, defaultRoute=false){
        this.NavBar.addlink(id,'');

        this.routeMap[id]=page;

        if(defaultRoute){
            this.defaultRoute=id;
        }
    }
    show(element){
        this.NavBar.appendToElement(element);
        
        if(this.defaultRoute){
            this.activateRoute(this.defaultRoute);
        }
    }

}