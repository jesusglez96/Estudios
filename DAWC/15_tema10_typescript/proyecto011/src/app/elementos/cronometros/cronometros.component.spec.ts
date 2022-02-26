import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CronometrosComponent } from './cronometros.component';

describe('CronometrosComponent', () => {
  let component: CronometrosComponent;
  let fixture: ComponentFixture<CronometrosComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CronometrosComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(CronometrosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
