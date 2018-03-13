package org.mypackage.hello;

import java.io.BufferedReader;
import java.io.DataOutputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.net.HttpURLConnection;
import java.net.URL;
import java.net.URLConnection;
import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.entity.StringEntity;
import org.apache.http.impl.client.HttpClientBuilder;
import org.json.simple.JSONObject;

public class FacturaHandler {
    private int id;
    private String idCliente;
    private String tipo;
    private String memoria;
    private String cpu;
    private String gpu;
    private String discoDuro;
    private String marca;
    private String monitor;
    private String fecha;
    private int monto;
    private String estado;

    public FacturaHandler() {
        estado="Proforma";
        monto=0;
        
    }

    public int getId() {
       return id;
    }

    public void setId(int id) {
       this.id = id;
    }

    public String getIdCliente() {
       return idCliente;
    }

    public void setIdCliente(String idCliente) {
       this.idCliente = idCliente;
    }

    public String getTipo() {
       return tipo;
    }

    public void setTipo(String tipo) {
        if(tipo.equals("laptop")){
            this.tipo="laptop";
            this.monto=120000;
        }
        if(tipo.equals("desktop")){
            this.tipo="desktop";
            this.monto=200000;
        }
    }

    public String getMemoria() {
       return memoria;
    }

    public void setMemoria(String memoria) {
        if(memoria.equals("Pocos programas")){
            this.memoria="4GB de memoria RAM";
            this.monto+=10000;
        }
        if(memoria.equals("Muchos programas")){
            this.memoria="8GB de memoria RAM";
            this.monto+=20000;
        }
        if(memoria.equals("Programas pesados")){
            this.memoria="16GB de memoria RAM";
            this.monto+=40000;
        }
    }

    public String getCpu() {
       return cpu;
    }

    public void setCpu(String cpu) {
        if(cpu.equals("AMD A8")){
            this.cpu="AMD A8-5600K";
            this.monto+=36000;
        }
        if(cpu.equals("AMD A10")){
            this.cpu="A10-5800K";
            this.monto+=40000;
        }
        if(cpu.equals("Intel Core i3")){
            this.cpu="Intel Core i3";
            this.monto+=20000;
        }
        if(cpu.equals("Intel Core i5")){
            this.cpu="Intel Core i5";
            this.monto+=30000;
        }
        if(cpu.equals("Intel Core i7")){
            this.cpu="Intel Core i7";
            this.monto+=46000;
        }
    }

    public String getGpu() {
       return gpu;
    }

    public void setGpu(String gpu) {
        if(gpu.equals("ATI Radeon")){
            this.gpu="ATI Radeon R9";
            this.monto+=56000;
        }
        if(gpu.equals("Nvidia")){
            this.gpu="Nvidia HD 1080";
            this.monto+=60000;
        }
    }

    public String getDiscoDuro() {
       return discoDuro;
    }

    public void setDiscoDuro(String discoDuro) {
        if(discoDuro.equals("Documentos de texto")){
            this.discoDuro="HDD 1TB";
            this.monto+=30000;
        }
        if(discoDuro.equals("Archivos multimedia")){
            this.discoDuro="HDD 2TB";
            this.monto+=40000;
        }
        if(discoDuro.equals("Procesamiento")){
            this.discoDuro="SSD 128";
            this.monto+=60000;
        }
        if(discoDuro.equals("Procesamiento II")){
            this.discoDuro="SSD 256";
            this.monto+=90000;
        }
    }

    public String getMarca() {
       return marca;
    }

    public void setMarca(String marca) {
       this.marca = marca;
    }

    public String getMonitor() {
       return monitor;
    }

    public void setMonitor(String monitor) {
        if(monitor.equals("Compacto")){
            this.monitor="16 Pulgadas";
            this.monto+=50000;
        }
        if(monitor.equals("Medio")){
            this.monitor="19 Pulgadas";
            this.monto+=75000;
        }
        if(monitor.equals("Grande")){
            this.monitor="22 Pulgadas";
            this.monto+=100000;
        }
    }

    public String getFecha() {
       return fecha;
    }

    public void setFecha(String fecha) {
       this.fecha = fecha;
    }

    public int getMonto() {
       return monto;
    }

    public void setMonto(int monto) {
       this.monto = monto;
    }

    public String getEstado() {
       return estado;
    }

    public void setEstado(String estado) {
       this.estado = estado;
    }
    
    public String getplaceFactura() throws IOException{
        JSONObject jsonFactura = new JSONObject();
        jsonFactura.put("Id", 444);
        jsonFactura.put("IdCliente", this.idCliente);
        jsonFactura.put("Tipo", this.tipo);
        jsonFactura.put("Memoria", this.memoria);
        jsonFactura.put("Cpu", this.cpu);
        jsonFactura.put("Gpu", this.gpu);
        jsonFactura.put("DiscoDuro", this.discoDuro);
        jsonFactura.put("Marca", this.marca);
        jsonFactura.put("Monitor", this.monitor);
        jsonFactura.put("Fecha", this.fecha);
        jsonFactura.put("Monto", this.monto);
        jsonFactura.put("Estado", this.estado);
        System.out.println(jsonFactura.toString());

        try {
            URL url = new URL("http://localhost:60036/FacturaService.svc/placeFactura");
            HttpURLConnection connection = (HttpURLConnection)url.openConnection();
            connection.setRequestMethod("POST");
            connection.setRequestProperty("Content-Type", "application/json");
            connection.setConnectTimeout(5000);
            connection.setDoOutput(true);
            DataOutputStream wr = new DataOutputStream(connection.getOutputStream());
            wr.writeBytes(jsonFactura.toString());
            wr.flush();
            wr.close();
            
            int responseCode = connection.getResponseCode();//getting response code

            BufferedReader bufferedReader = null;
            if (responseCode == 200) {
                bufferedReader = new BufferedReader(new InputStreamReader(connection.getInputStream()));
            } else {
                bufferedReader = new BufferedReader(new InputStreamReader(connection.getErrorStream()));
            }
            } catch (Exception ex) {
                return ex.toString();
        }
        return "Su orden se ha colocado con exito vaya a la caja y retire con el num: " + id;
    }
    public String getFactura(int id) throws IOException{
        String jsonResponse;

        try {
            URL url = new URL("http://localhost:60036/FacturaService.svc/GetFactura/" + id);
            HttpURLConnection connection = (HttpURLConnection)url.openConnection();
            connection.setRequestMethod("GET");
            connection.setRequestProperty("Content-Type", "application/json");
            connection.setConnectTimeout(5000);
            connection.setDoOutput(true);
            
            int responseCode = connection.getResponseCode();
            jsonResponse = connection.getContent().toString();
            
            System.out.println();
            } catch (Exception ex) {
                return ex.toString();
        }
        return jsonResponse;
    }
    
}
