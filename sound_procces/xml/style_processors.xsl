<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
   <table align="center" border="1">
     <tr bgcolor="#de8a1d ">
       <th style="text-align:left color:white;">Изображение</th>
       <th style="text-align:left color:white;">Название</th>
       <th style="text-align:left color:white;">Цена</th>
       <th style="text-align:left color:white;">Описание</th>
     </tr>
     <xsl:for-each select="catalog/cd">
     <tr>
       <td><img style="height: 220px; width: 150px;"><xsl:attribute name="src"><xsl:value-of select="pic"/></xsl:attribute></img></td>
       <td><xsl:value-of select="title" /></td>
       <td><xsl:value-of select="price" /></td>
       <td><xsl:value-of select="desc" /></td>
     </tr>
     </xsl:for-each>
   </table>
</xsl:template>

</xsl:stylesheet>
