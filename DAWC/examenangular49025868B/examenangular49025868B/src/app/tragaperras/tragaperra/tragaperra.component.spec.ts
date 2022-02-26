import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TragaperraComponent } from './tragaperra.component';

describe('TragaperraComponent', () => {
  let component: TragaperraComponent;
  let fixture: ComponentFixture<TragaperraComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TragaperraComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TragaperraComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
