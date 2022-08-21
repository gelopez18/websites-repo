import { DashBoard } from "../UI/Dash-board.js";


export default class ApplicationBase{
    constructor(title){
        this.title = title;
        this.DashBoard = new DashBoard(this.title);
        this.defaultRoute = null;
        this.routeMap = {};
        
    }
    addRoute(id, page, defaultRoute = false){
        this.DashBoard.addlink(id, '');
        this.routeMap[id]=page;
        if(defaultRoute === true){
            this.defaultRoute=id;
        }
    }
    activateRoute(route){
        let content = this.DashBoard.element.find('.page-content');
        content.empty();
        this.routeMap[route].appendToElement(content);
    }

    show(element) {
        this.DashBoard.appendToElement(element);
        
        this.DashBoard.element.find('.mdl-navigation__link').click((event) => {
            let route = event.target.innerHTML;
            this.activateRoute(route);
        });

                
        if (this.defaultRoute) {
            this.activateRoute(this.defaultRoute);
        }
    }

}