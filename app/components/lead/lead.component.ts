import { Component, OnInit, OnDestroy} from "@angular/core";
declare var fetch;
@Component({
    moduleId: module.id,
    selector:'app-lead',
    templateUrl: 'lead.component.html',
    styleUrls: ['lead.component.scss']
})

export class LeadComponent implements OnInit, OnDestroy {

    public model: Object = {};
    public isValidLead: boolean = true;
    public codeResponse: number = 1;
    // 1 - form.
    // 2 - loading.
    // 3 - succes.
    // 4 - fail
    public constructor(){
     
    }
    
    public setObj() {
        this.model['firstName'] = document.querySelector('#firstName')['value'];
        this.model['lastName'] = document.querySelector('#lastName')['value'];
        this.model['emailAddress'] = document.querySelector('#email')['value'];
        this.model['street'] = document.querySelector('#address')['value'];
        this.model['mobilePhoneNumber'] = document.querySelector('#phone')['value'];
        this.model['country'] = document.querySelector('#country')['value'];
        this.model['city'] = document.querySelector('#city')['value'];
        this.model['state'] = document.querySelector('#state')['value'];
    }
    public sendLead(event) {
        event.preventDefault();
        this.codeResponse = 2;
        this.isValidLead = true;
        this.setObj();
        
        if (
            this.model['firstName'] && 
            this.model['lastName'] && 
            this.model['country'] && 
            this.model['street'] && 
            this.model['city'] && 
            this.model['emailAddress'] && 
            this.model['state'] && 
            this.model['mobilePhoneNumber']
        ) {
            let rand = Math.random() * Math.pow(10,9);
            this.model['ownerID'] = parseInt(rand.toString()).toString();
            this.model['leadStatus'] = "open";
            console.log(this.model);
            this.request();
        }
        else {
            this.isValidLead = false;
            this.codeResponse = 1;
        }

    }
    public newLead() {
        this.isValidLead = true;
        this.codeResponse = 1;
    }

    public async request() {
        let data = {}
        data['method'] = "createLeads";
        data['id'] = "1";
        data['params'] = {"object": this.model};

        let request = {
            "method": 'POST',
            "headers": {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            "body": JSON.stringify(data)
        } 
        const url =  "http://api.sharpspring.com/pubapi/v1/?accountID=665FED498F261C26CD5EA2B9FB56CF6D&secretKey=F77777BF6188FFFBC46673EBB789839C";
        const rawResponse = await fetch(url,request).then(resp => {
            console.log(resp)
            if(resp){
                this.codeResponse = (resp.json()) ? 3 : 4;
            }
        });
    }
    ngOnInit() {}
    ngOnDestroy() {}
}
