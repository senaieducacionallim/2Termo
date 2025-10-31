// src/app/app.component.ts
import { Component } from '@angular/core';
import { CommonModule } from '@angular/common'; // 1. Precisa disso para *ngFor
import { RouterOutlet } from '@angular/router';
import { Book } from './book.model'; // 2. Importa nosso "formato"
import { BookItemComponent } from './book-item/book-item'; // 3. Importa o "card"

@Component({
  selector: 'app-root',
  standalone: true,
  // 4. Diz ao Angular que este componente usará
  //    CommonModule (para *ngFor) e nosso BookItemComponent
  imports: [CommonModule, BookItemComponent], 
  templateUrl: './app.html',
  styleUrl: './app.css'
})
export class AppComponent {
  title = 'minha-livraria-v2';

  // 5. Nossa lista de livros "fake"
  bookList: Book[] = [
    {
      id: 1,
      title: 'O Senhor dos Anéis',
      author: 'J.R.R. Tolkien',
      coverUrl: 'https://m.media-amazon.com/images/I/71ZLavBSbaL._AC_UF1000,1000_QL80_.jpg'
    },
    {
      id: 2,
      title: 'O Guia do Mochileiro das Galáxias',
      author: 'Douglas Adams',
      coverUrl: 'https://m.media-amazon.com/images/I/81eMrK+qV8L._AC_UF1000,1000_QL80_.jpg'
    },
    {
      id: 3,
      title: 'Duna',
      author: 'Frank Herbert',
      coverUrl: 'https://m.media-amazon.com/images/I/81d+S8+dDPL._AC_UF1000,1000_QL80_.jpg'
    }
  ];
}