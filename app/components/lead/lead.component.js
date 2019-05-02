"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : new P(function (resolve) { resolve(result.value); }).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
const core_1 = require("@angular/core");
let LeadComponent = class LeadComponent {
    // 1 - form.
    // 2 - loading.
    // 3 - succes.
    // 4 - fail
    constructor() {
        this.model = {};
        this.isValidLead = true;
        this.codeResponse = 1;
    }
    setObj() {
        this.model['firstName'] = document.querySelector('#firstName')['value'];
        this.model['lastName'] = document.querySelector('#lastName')['value'];
        this.model['emailAddress'] = document.querySelector('#email')['value'];
        this.model['street'] = document.querySelector('#address')['value'];
        this.model['mobilePhoneNumber'] = document.querySelector('#phone')['value'];
        this.model['country'] = document.querySelector('#country')['value'];
        this.model['city'] = document.querySelector('#city')['value'];
        this.model['state'] = document.querySelector('#state')['value'];
    }
    sendLead(event) {
        event.preventDefault();
        this.codeResponse = 2;
        this.isValidLead = true;
        this.setObj();
        if (this.model['firstName'] &&
            this.model['lastName'] &&
            this.model['country'] &&
            this.model['street'] &&
            this.model['city'] &&
            this.model['emailAddress'] &&
            this.model['state'] &&
            this.model['mobilePhoneNumber']) {
            let rand = Math.random() * Math.pow(10, 9);
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
    newLead() {
        this.isValidLead = true;
        this.codeResponse = 1;
    }
    request() {
        return __awaiter(this, void 0, void 0, function* () {
            let data = {};
            data['method'] = "createLeads";
            data['id'] = "1";
            data['params'] = { "object": this.model };
            let request = {
                "method": 'POST',
                "headers": {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                "body": JSON.stringify(data)
            };
            const url = "http://api.sharpspring.com/pubapi/v1/?accountID=665FED498F261C26CD5EA2B9FB56CF6D&secretKey=F77777BF6188FFFBC46673EBB789839C";
            const rawResponse = yield fetch(url, request).then(resp => {
                console.log(resp);
                if (resp) {
                    this.codeResponse = (resp.json()) ? 3 : 4;
                }
            });
        });
    }
    ngOnInit() { }
    ngOnDestroy() { }
};
LeadComponent = __decorate([
    core_1.Component({
        moduleId: module.id,
        selector: 'app-lead',
        templateUrl: 'lead.component.html',
        styleUrls: ['lead.component.scss']
    }),
    __metadata("design:paramtypes", [])
], LeadComponent);
exports.LeadComponent = LeadComponent;
//# sourceMappingURL=lead.component.js.map