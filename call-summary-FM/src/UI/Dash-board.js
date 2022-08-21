import { BaseElement } from "./base-element.js";

export class DashBoard extends BaseElement{
    constructor(title){
        super();
        this.title = title;
        this.links = [];
    }
    getElementString(){
        let links = '';
            for (let link of this.links){
                links += `<li class="nav-item">
                <a class="nav-link text-white bg-dark" href="customer.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  ${link.title}
                </a>
              </li>`;
            }

        return `
        <nav class="navbar-dark bg-dark col-md-2 d-none d-md-block sidebar">
          <div class="sidebar-sticky">

            <ul class="nav flex-column ">
                <li>
                  <br>
                    <img src="Picture1.png" height="50"width="175">
                    <br>
                </li>
              
            </ul>
          </div>
        </nav>
        `;
    }
}