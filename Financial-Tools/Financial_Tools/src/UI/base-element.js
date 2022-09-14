import 'https://code.jquery.com/jquery-3.6.0.min.js';
window.$ = $;
window.jQuery = jQuery;

export class BaseElement{
    constructor(){
        this.element = null;
    }
    appendToElement(el){
        this.createElement();
        el.append(this.element);
    }
    createElement(){
        let s = this.getElementString();
        this.element = $(s);
    }
    getElementString(){
        throw new error('Please overRide this Methods');
    }

}