import { list } from "../classes/tasks.js";
import { BaseElement } from "./base-element.js";

export class Table extends BaseElement{
    constructor(headers, trTags){
        super();
        this.headers = headers;
        this.data = list; 
        this.trTags = trTags; 
       
    }

    getElementString(){

        let thTags = '';
                for (let h of this.headers) {
                    thTags += `<th class="mdl-data-table__cell--non-numeric">${h}</th>\n`;
                }

        return `
        <table class="table table-dark table-striped">
                <thead>
                    <tr>
                    ${thTags}
                    </tr>
                </thead>
                <tbody>
                    ${this.trTags}
                </tbody>
            </table>

        `;
    }
    
}