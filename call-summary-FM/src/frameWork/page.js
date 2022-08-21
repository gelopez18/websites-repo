import { BaseElement } from "../UI/base-element.js";

export class Page extends BaseElement{
    constructor(pageTitle){
        super();
        this.pageTitle = pageTitle;
    }
}