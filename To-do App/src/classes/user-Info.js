export const UserList=[];
export class UserInfo{
	constructor(uName, org, date){
		this.name =uName;
		this.task = org;
        this.date =date;
       
	}
    
 addUserList(){
  
  let name = document.getElementById("UserName").value
  let task =  document.getElementById("Org").value;
  let date =  Date.now();
  let uObj = new UserInfo(name, task, date)
  UserList.push(uObj)
   return UserList;

}    


}
