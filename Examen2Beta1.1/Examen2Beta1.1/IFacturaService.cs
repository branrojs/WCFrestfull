using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.ServiceModel.Web;
using System.Text;

namespace Examen2Beta1._1
{
    [ServiceContract]
    public interface IFacturaService
    {
        //contrato obtener factura
        [OperationContract]
        [WebGet(UriTemplate = "/GetFactura/{Id}",
            RequestFormat = WebMessageFormat.Json,
            ResponseFormat = WebMessageFormat.Json)]
        Factura GetFactura(string Id);
        //hacer factura
        [OperationContract]
        [WebInvoke(UriTemplate = "/PlaceFactura",
            RequestFormat = WebMessageFormat.Json,
            ResponseFormat = WebMessageFormat.Json, Method = "POST")]
        bool PlaceFactura(Factura fact);
        //confirmar factura
        [OperationContract]
        [WebGet(UriTemplate = "/AceptarFactura/{Id}",
            RequestFormat = WebMessageFormat.Json,
            ResponseFormat = WebMessageFormat.Json)]
        bool AceptarFactura(string Id);
        //negar factura
        [OperationContract]
        [WebGet(UriTemplate = "/NegarFactura/{Id}",
            RequestFormat = WebMessageFormat.Json,
            ResponseFormat = WebMessageFormat.Json)]
        bool NegarFactura(string Id);

    }
}
