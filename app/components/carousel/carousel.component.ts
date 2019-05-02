import { Component } from "@angular/core";
declare var fetch;
@Component({
    moduleId: module.id,
    selector:'app-carousel',
    templateUrl: 'carousel.component.html',
    styleUrls: ['carousel.component.scss']
})

export class CarouselComponent {
    public listImg: any = [];
    public listVisible:any[] = [];
    public index = 0;
    public visibleItens = 3;
    constructor () {
        this.request();
    }

    public async request() {
        let request = {
            "method": 'GET',
            "headers": {
                'Accept': 'application/json'
            },
        } 
        const url =  "https://jsonplaceholder.typicode.com/photos";
        const rawResponse = await fetch(url, request).then(resp => resp.json()).then(data => {
            if(data){
                this.listImg = data;
                console.log(this.listImg)
                this.cutList();
            }
        });
    }
    public prev() {
        if(this.listImg[this.index - 1]) {
            this.index--;
            this.cutList();
        }
    }
    public next() {
        if(this.listImg[this.index + 3]) {
            this.index++;
            this.cutList();
        }
    }

    public cutList(){
        this.listVisible = this.listImg.slice(this.index, this.index + 3);
    }
}