
export class Task {
    constructor(){
        this.user=null;
        this.task=null;
    }
    listTask(user, task){
        const task_list = {user, task};
        const assignTask = [];
        for(let i in task_list){
            assignTask.push(task_list);
        }
        
        console.log(assignTask);
    }
}