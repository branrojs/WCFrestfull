using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Runtime.Serialization;

namespace Examen2Beta1._1
{
    [DataContract]
    public class Factura
    {
        [DataMember]
        public int Id { get; set; }
        [DataMember]
        public string IdCliente { get; set; }
        [DataMember]
        public string Tipo { get; set; }
        [DataMember]
        public string Memoria { get; set; }
        [DataMember]
        public string Cpu { get; set; }
        [DataMember]
        public string Gpu { get; set; }
        [DataMember]
        public string DiscoDuro { get; set; }
        [DataMember]
        public string Marca { get; set; }
        [DataMember]
        public string Monitor { get; set; }
        [DataMember]
        public string Fecha { get; set; }
        [DataMember]
        public int Monto { get; set; }
        [DataMember]
        public string Estado { get; set; }
    }
}