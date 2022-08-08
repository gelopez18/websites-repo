
import { BaseElement } from "./base-element.js";

export class Table extends BaseElement{
    constructor(headers, data){
        super();
        this.headers = headers;
        this.data = data; 
        this.trTags = '';
    }
    addData(){
        
        for (let row of this.data) {
            this.trTags += `<tr>`;
                console.log(row);
                
                for (let property of this.headers) {
                    
                    let field = row[property.toLowerCase()];
                    this.trTags += `<td>${field}</td>`;
                        
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