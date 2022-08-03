export class Task{
    constructor(user, task){
        this.user=user;
        this.task=task;
        this.timeStamp=Date.now();
        this.task_list=[];
        this.assingTask={};
    }
    addTaskList(){
        var sizeObj = Object.keys(this.assingTask).length;
        for(let i=0;i<sizeObj;i++){
            this.assingTask[i]={user, task};
            for(let j=0;j<this.task_list.length;j++){
                this.task_list.push(this.assingTask);
            }
            console.log(this.task_list);
        }
    }
}