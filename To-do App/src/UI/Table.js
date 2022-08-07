import { list } from "../classes/tasks.js";
import { BaseElement } from "./base-element.js";

export class Table extends BaseElement{
    constructor(headers){
        super();
        this.headers = headers;
        this.data = list; 
        this.trTags = '';
    }
    addData(){
        
        for (let row of this.data) {
            this.trTags += `<tr>`;
                
                for (let property of this.headers) {
                    let field = row[property.toLowerCase()];
                    this.trTags += `<td>${field}</td>`;
                    console.log(field);
                    }
                    this.trTags +=`</tr>`;
                }

        return this.trTags ;
      }  

    getElementString(){

        this.trTags = this.addData();
       
        let thTags = '';
                for (let h of this.headers) {
                    thTags += `<th>${h}</th>\n`;
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