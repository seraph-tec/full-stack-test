import { NgModule } from '@angular/core';
import { CommonModule } from "@angular/common";

import { CarouselComponent } from './carousel/carousel.component';
// import { FooterComponent } from './footer/footer.component';
import { HeaderComponent } from './header/header.component';
import { LeadComponent } from './lead/lead.component';


@NgModule({
    imports: [
        CommonModule,
    ],
    declarations: [
        CarouselComponent,
        HeaderComponent,
        LeadComponent,
    ],
    exports: [
        CarouselComponent,
        HeaderComponent,
        LeadComponent,
    ]
})

export class ComponentsModule {}