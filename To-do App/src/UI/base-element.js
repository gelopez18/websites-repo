import 'https://code.jquery.com/jquery-3.6.0.min.js'
window.$ = $;
window.jQuery = jQuery;

 export class BaseElement{
    constructor(){
        this.element =null; 
    }
    appendToElement(el){ //we passed on the element to append
        this.createElement();
        el.append(this.element);
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