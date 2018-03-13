using System;
using System.Collections.Generic;

using System.Runtime.Serialization;
using System.ServiceModel;
using System.Text;

using System.Data.SqlClient;
using System.Data;
using System.Configuration;

namespace Examen2Beta1._1
{
    public class FacturaService : IFacturaService
    {
        public bool NegarFactura(string Id)
        {
            using (SqlConnection conn = new SqlConnection("Data Source=(localdb)\\MSSQLLocalDB;Initial Catalog=tienda;Integrated Security=True;Connect Timeout=30;Encrypt=False;TrustServerCertificate=True;ApplicationIntent=ReadWrite;MultiSubnetFailover=False"))
            //using (SqlConnection conn = new SqlConnection("Data Source=BRANDON-PC\\BRANDON;Initial Catalog=tienda;Integrated Security=True"))
            {
                conn.Open();
                string query = "Update factura set estado='Cancelada' where id=" + int.Parse(Id) + ";";
                SqlCommand cmd = new SqlCommand(query, conn);
                cmd.ExecuteNonQuery();
                conn.Close();

            }
            return true;
        }
        public bool AceptarFactura(string Id)
        {
            using (SqlConnection conn = new SqlConnection("Data Source=(localdb)\\MSSQLLocalDB;Initial Catalog=tienda;Integrated Security=True;Connect Timeout=30;Encrypt=False;TrustServerCertificate=True;ApplicationIntent=ReadWrite;MultiSubnetFailover=False"))
            //using (SqlConnection conn = new SqlConnection("Data Source=BRANDON-PC\\BRANDON;Initial Catalog=tienda;Integrated Security=True"))
            {
                conn.Open();
                string query = "Update factura set estado='Aceptada' where id="+int.Parse(Id)+";";
                SqlCommand cmd = new SqlCommand(query, conn);
                cmd.ExecuteNonQuery();
                conn.Close();

            }
            return true;
        }

        public Factura GetFactura(string Id)
        {
            Factura fact = new Factura();
            using (SqlConnection conn = new SqlConnection("Data Source=BRANDON-PC\BRANDON;Initial Catalog=bj;Integrated Security=True"))
            //using (SqlConnection conn = new SqlConnection("Data Source=BRANDON-PC\\BRANDON;Initial Catalog=tienda;Integrated Security=True"))
            {
                conn.Open();
                string query = "Select * from factura where id=" + int.Parse(Id) + " AND estado='Proforma';";
                SqlCommand cmd = new SqlCommand(query, conn);
                SqlDataReader dr = cmd.ExecuteReader();
                dr.Read();
                fact.Id = int.Parse(dr[0].ToString());
                fact.IdCliente = dr[1].ToString();
                fact.Tipo = dr[2].ToString();
                fact.Memoria = dr[3].ToString();
                fact.Cpu = dr[4].ToString();
                fact.Gpu = dr[5].ToString();
                fact.DiscoDuro = dr[6].ToString();
                fact.Marca = dr[7].ToString();
                fact.Monitor = dr[8].ToString();
                fact.Fecha = dr[9].ToString();
                fact.Monto = int.Parse(dr[10].ToString());
                fact.Estado = dr[11].ToString();
                dr.Close();
                conn.Close();

            }
            return fact;
        }

        public bool PlaceFactura(Factura fact)
        {
            using (SqlConnection conn = new SqlConnection("Data Source=(localdb)\\MSSQLLocalDB;Initial Catalog=tienda;Integrated Security=True;Connect Timeout=30;Encrypt=False;TrustServerCertificate=True;ApplicationIntent=ReadWrite;MultiSubnetFailover=False"))
            //using (SqlConnection conn = new SqlConnection("Data Source=BRANDON-PC\\BRANDON;Initial Catalog=tienda;Integrated Security=True"))
            {
                conn.Open();
                string query = "INSERT INTO factura(id,idcliente,tipo,memoria,cpu,gpu,discoduro,marca,monitor,fecha,monto,estado) VALUES(@param1,@param2,@param3,@param4,@param5,@param6,@param7,@param8,@param9,@param10,@param11,@param12)";
                SqlCommand cmd = new SqlCommand(query, conn);
                cmd.Parameters.Add("@param1", SqlDbType.Int).Value = fact.Id;
                cmd.Parameters.Add("@param2", SqlDbType.NVarChar, 50).Value = fact.IdCliente;
                cmd.Parameters.Add("@param3", SqlDbType.NVarChar, 50).Value = fact.Tipo;
                cmd.Parameters.Add("@param4", SqlDbType.NVarChar, 50).Value = fact.Memoria;
                cmd.Parameters.Add("@param5", SqlDbType.NVarChar, 50).Value = fact.Cpu;
                cmd.Parameters.Add("@param6", SqlDbType.NVarChar, 50).Value = fact.Gpu;
                cmd.Parameters.Add("@param7", SqlDbType.NVarChar, 50).Value = fact.DiscoDuro;
                cmd.Parameters.Add("@param8", SqlDbType.NVarChar, 50).Value = fact.Marca;
                cmd.Parameters.Add("@param9", SqlDbType.NVarChar, 50).Value = fact.Monitor;
                cmd.Parameters.Add("@param10", SqlDbType.NVarChar, 50).Value = fact.Fecha;
                cmd.Parameters.Add("@param11", SqlDbType.Int).Value = fact.Monto;
                cmd.Parameters.Add("@param12", SqlDbType.NVarChar, 50).Value = fact.Estado;
                cmd.ExecuteNonQuery();
                conn.Close();

            }
            return true;
        }

    }
}
