package com.junit.testing;

import static org.assertj.core.api.Assertions.assertThat;
import static org.mockito.Mockito.*;

import org.junit.jupiter.api.AfterEach;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;
import org.junit.jupiter.api.extension.ExtendWith;
import org.mockito.InjectMocks;
import org.mockito.Mock;
import org.mockito.MockitoAnnotations;
import org.mockito.junit.jupiter.MockitoExtension;

import java.util.List;
import java.util.Optional;

@ExtendWith(MockitoExtension.class)
class BookServiceTest {

    @Mock
    private BookRepo bookRepo;
    @InjectMocks
    private BookService bookService;

    Book book;
    AutoCloseable autoCloseable;

    @BeforeEach
    void setUp() {
        autoCloseable= MockitoAnnotations.openMocks(this);
        book=new Book(1L,"harry","Old Book",4);


    }

    @AfterEach
    void tearDown()throws Exception {
        autoCloseable.close();
    }

    @Test
    void testaddBook() {
        when(bookRepo.save(book)).thenReturn(book);
        Book result=bookService.addBook(book);
        assertThat(result).isEqualTo(book);
        assertThat(result.getBookId()).isEqualTo(book.getBookId());
    }

    @Test
    void getAllBooks() {
        when(bookRepo.findAll()).thenReturn(List.of(book));
        List<Book> result=bookService.getAllBooks();
        assertThat(result).isNotNull();
        verify(bookRepo).findAll();

    }

    @Test
    void getBookById() {
        when(bookRepo.findById(book.getBookId())).thenReturn(Optional.ofNullable(book));
        Book result=bookService.getBookById(1L);
        assertThat(result).isNotNull();
        assertThat(result).isEqualTo(book);
        verify(bookRepo).findById(1L);
    }

    @Test
    void testupdateBookById() {
        Book updatedBook=new Book(1L,"Potter","New Book",3);
        when(bookRepo.findById(1L)).thenReturn(Optional.ofNullable(book));
        when(bookRepo.save(any(Book.class))).thenReturn(updatedBook);
        assertThat(bookService.updateBookById(1L,book)).isNotNull();
       assertThat(bookService.updateBookById(1L,book)).isEqualTo(updatedBook);
       verify(bookRepo, times(2)).findById(1L);

    }

    @Test
    void getBooksByRating() {
    when(bookRepo.findByRating(4)).thenReturn(List.of(book));
    List<Book> result=bookService.getBooksByRating(4);
    assertThat(result).isNotNull();
    assertThat(result.get(0).getRating()).isEqualTo(4);
    verify(bookRepo).findByRating(4);

    }

    @Test
    void deleteBookById() {
        when(bookRepo.findById(1L)).thenReturn(Optional.ofNullable(book));
        bookService.deleteBookById(1L);
        verify(bookRepo, times(1)).deleteById(1L);
    }
}