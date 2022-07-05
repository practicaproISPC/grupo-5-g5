/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */
package dreamteam.projectvocabulary;

import com.emergents.utils.ConexionBD;
import jakarta.servlet.ServletException;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class categories extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try ( PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet categories</title>");            
            out.println("</head>");
            out.println("<body>");
            System.out.println("<h1>Servlet categories at " + request.getContextPath() + "</h1>");
            out.println("<main>");
            out.println("<p> {\"categories\":[ <br/>");
            try {
                
                out.println(this.getCategories());
            } catch (SQLException ex) {
                System.out.print(ex.toString());
            }
            out.println("]}</p>");
            out.println("</main>");
            out.println("</body>");
            out.println("</html>");
        }
    }
    
    public static String getCategories() throws SQLException{

        ConexionBD channel = new ConexionBD();
        Connection conn = channel.connect();
       
        
        String sql = "SELECT name, image FROM categories;";
        
        Statement stmt = conn.createStatement();
        ResultSet rs = stmt.executeQuery(sql);

        String returnString = "";

        while (rs.next()) {

            returnString += "{\"category\":\"" + rs.getString("name") + "\",\"image\":\"" + rs.getString("image") + "\"}, <br/>";

        }

        return returnString; 
        
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}