import $ from 'jquery';

export class BaseElement{
    constructor(){
        this.element =null; 
    }
    appendToElement(el){ //we passed on the element to append
        this.createElement();
        el.appendToElement(this.appendToElement);
        this.enableJS();
    }
    createElement(){
        let s = this.getElementString()
        this.element = $(s);
    }
    getElementString(){
        throw new Error('Please overRide this Method');
    }
    enableJS(){
        componentHandler.upgradeElement(this.element[0]);
    }
}