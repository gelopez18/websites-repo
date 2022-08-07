import { list } from "../classes/tasks.js";

export class DataSVC {
    constructor(headers){

        this.headers = headers;
        this.data = list; 
        this.trTags = ''; 
       
    }

    addData(){

    this.data.forEach((row)=>{
          this.trTags +='<tr>';
              for (let property of this.headers) {
              let field = row[property.toLowerCase()];
              this.tdTags += `<td class="mdl-data-table__cell--non-numeric">${field}</td>
                      `;
          }
          this.trTags +=`${this.tdTags}</tr>`;
      }); 
      
      return this.trTags;
  } 
}






