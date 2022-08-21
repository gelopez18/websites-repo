import { BaseElement } from "./base-element.js";

export class Hr extends BaseElement{
    constructor(style){
        super();
        this.style = style;

    }
    getElementString() {

      return `
      <hr class="${this.style}">
      `;
  }


}
