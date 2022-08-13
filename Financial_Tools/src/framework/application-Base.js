import { navBar } from "../UI/nav-bar.js";

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