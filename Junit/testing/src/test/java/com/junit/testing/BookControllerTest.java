package com.junit.testing;

import com.fasterxml.jackson.databind.ObjectMapper;
import org.junit.jupiter.api.AfterEach;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;
import org.mockito.InjectMocks;
import org.mockito.Mockito;
import static org.mockito.Mockito.*;

import org.mockito.MockitoAnnotations;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.autoconfigure.web.servlet.WebMvcTest;
import org.springframework.boot.test.mock.mockito.MockBean;
import org.springframework.http.MediaType;
import org.springframework.test.web.servlet.MockMvc;
import org.springframework.test.web.servlet.setup.MockMvcBuilders;

import java.util.ArrayList;
import java.util.List;

import static org.assertj.core.api.Assertions.assertThat;
import static org.springframework.test.web.servlet.request.MockMvcRequestBuilders.*;
import static org.springframework.test.web.servlet.result.MockMvcResultHandlers.print;
import static org.springframework.test.web.servlet.result.MockMvcResultMatchers.*;

@WebMvcTest (BookController.class)
class BookControllerTest {

    @Autowired
    private MockMvc mockMvc;

    @MockBean
    private BookService bookService;

     Book book;
     Book book1;
    List<Book> books=new ArrayList<>();


    @BeforeEach
    void setUp() {
        book=new Book(1L,"Harry","New Book",4);
        book1=new Book(2L,"Potter","old Book",3);
        books.add(book);
        books.add(book1);

    }

    @Test
    void addBook() throws Exception {
        ObjectMapper objectMapper = new ObjectMapper();
        String requestJson = objectMapper.writeValueAsString(book);

        when(bookService.addBook(book)).thenReturn(book);
        this.mockMvc.perform(post("/book")
                .contentType(MediaType.APPLICATION_JSON )
                .content(requestJson))
                .andDo(print())
                .andExpect(status().isOk());

        }

    @Test
    void testgetAllBooks() throws Exception {
        when(bookService.getAllBooks()).thenReturn(books);
        this.mockMvc.perform(get("/book"))
                .andDo(print())
                .andExpect(status().isOk())
                .andExpect(jsonPath("$[0].name").value("Harry"))    ;

    }

    @Test
    void testgetBookById() throws Exception {
        when(bookService.getBookById(1L)).thenReturn(book);
        this.mockMvc.perform(get("/book/{bookid}",1L))
                .andDo(print())
                .andExpect(status().isOk())
                .andExpect(jsonPath("$.bookId").value(1L))
                .andExpect(jsonPath("$.name").value("Harry"));
    }

    @Test
    void testgetBooksByRating()throws Exception {
        when(bookService.getBooksByRating(4)).thenReturn(List.of(book));
        this.mockMvc.perform(get("/book/rating/{rate}",4))
                .andDo(print())
                .andExpect(status().isOk())
                .andExpect(jsonPath("$[0].rating").value(4));
    }

    @Test
    void testupdateBookById()throws Exception {
        Book updateBook = new Book(1L, "Marry", "Marry Old Book", 5);

        // Convert the book object to JSON
        ObjectMapper objectMapper = new ObjectMapper();
        String updatedJson = objectMapper.writeValueAsString(updateBook);

        // Mock the service method
        when(bookService.updateBookById(eq(1L), any(Book.class))).thenReturn(updateBook);

        // Perform the PUT request and assert the response
        this.mockMvc.perform(put("/book/{bookId}", 1L)  // Ensure this matches your controller's path
                        .contentType(MediaType.APPLICATION_JSON)
                        .content(updatedJson))
                .andDo(print())
                .andExpect(status().isOk())
                .andExpect(jsonPath("$.name").value("Marry"))
                .andExpect(jsonPath("$.summary").value("Marry Old Book"))
                .andExpect(jsonPath("$.rating").value(5));  // Add checks for all fields

    }

    @Test
    void deleteBookById() throws Exception {
        doNothing().when(bookService).deleteBookById(1L);
        this.mockMvc.perform(delete("/book/1"))
                .andDo(print())
                .andExpect(status().isOk());


    }
}