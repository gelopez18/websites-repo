export const UserList=[];
export class UserInfo{
	constructor(uName, Organization, date){
		this.name =uName;
		this.org = Organization;
        this.date =date;
	}
    
 addUserList(){
  
  let uName = document.getElementById('Name').value
  let Organization =  document.getElementById('Org').value;
  let date =  new Date();
  let finalDate = `${date.getMonth()}/${date.getDate()}/${date.getFullYear()}`;
 
  let uObj = new UserInfo(uName, Organization, finalDate)
   
  UserList.push(uObj);
   return UserList;

}    


}
