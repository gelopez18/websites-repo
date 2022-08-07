export const UserList=[];
export class UserInfo{
	constructor(uName, Organization, date){
		this.name =uName;
		this.Organization = Organization;
        this.date =date;
	}
    
 addUserList(){
  
  let Name = document.getElementById("Name").value
  let Organization =  document.getElementById("Organization").value;
  let date =  Date.now();
 
  let uObj = new UserInfo(Name, Organization, date)
   
  UserList.push(uObj);
   return UserList;

}    


}
