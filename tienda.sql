USE [tiendalinq]
GO
/****** Object:  Table [dbo].[factura]    Script Date: 23/03/2017 16:39:52 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[factura](
	[id] [int] NOT NULL,
	[idcliente] [nvarchar](50) NOT NULL,
	[tipo] [nvarchar](50) NOT NULL,
	[memoria] [nvarchar](50) NOT NULL,
	[cpu] [nvarchar](50) NOT NULL,
	[gpu] [nvarchar](50) NOT NULL,
	[discoduro] [nvarchar](50) NOT NULL,
	[marca] [nvarchar](50) NOT NULL,
	[monitor] [nvarchar](50) NOT NULL,
	[fecha] [nvarchar](50) NOT NULL,
	[monto] [int] NOT NULL,
	[estado] [nvarchar](50) NOT NULL
) ON [PRIMARY]

GO
INSERT [dbo].[factura] ([id], [idcliente], [tipo], [memoria], [cpu], [gpu], [discoduro], [marca], [monitor], [fecha], [monto], [estado]) VALUES (10550, N'Brandon', N'Desktop', N'512', N'AMD', N'ATI Radeon', N'1024 gb', N'Lenovo', N'DELL 17', N'HOY', 500000, N'Proforma')
USE [master]
GO
ALTER DATABASE [Tienda] SET  READ_WRITE 
GO
