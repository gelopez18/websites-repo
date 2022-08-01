import { BaseElement } from "./base-element.js";


export class User extends BaseElement{
    constructor(){
        super();
    }
    getElementString(){
        return`
        <div class="container"?
        <form>
        <div class="mb-3" >
        
          <label for="exampleInputEmail1" class="form-label">User Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your information.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Company</label>
          <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
        `;
    }
}