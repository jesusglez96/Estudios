import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-tragaperras',
  templateUrl: './tragaperras.component.html',
  styleUrls: ['./tragaperras.component.css'],
})
export class TragaperrasComponent implements OnInit {
  msg!: string;
  constructor() {}

  ngOnInit(): void {}

  sinCredito(event: string): void {
    console.log(event);
  }
  premio(event: number): void {
    console.log(event);
  }
}
