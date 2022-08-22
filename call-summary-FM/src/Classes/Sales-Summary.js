export const orderList = [];
export class SalesSummary{
	constructor(SRO, ClientName, wknumb, date){
        this.sro=SRO;
		this.ClientName =ClientName;
		this.wknumb = wknumb;
        this.date =date; 

	}
    
 addTaskList(){
        let sro = document.getElementById("sro").value;
        let wknumb =  document.getElementById("wkNumb").value;
        let clientName = document.getElementById("Client").value;

        let date =  new Date();
        let finalDate = `${date.getMonth()}/${date.getDate()}/${date.getFullYear()}`;

        let newOrder = new SalesSummary(sro, clientName, wknumb, finalDate);
        orderList.push(newOrder);
        return orderList;
    }

}   