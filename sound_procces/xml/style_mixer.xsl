<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style=" font-family: Arial; font-size: 12pt; background-color: #EEE">
   <xsl:for-each select="mixer_catalog/mixer">
      <div style="margin-left: 300px; margin-right: 300px; background-color: #de8a1d  ; color: black; padding: 4px">
         <span style=" margin-left: 20px; font-weight: bold"><xsl:value-of select="name"/> - 
         <xsl:value-of select="price"/></span>
      </div>
      <div style="margin-left: 20px; margin-bottom: 1em; font-size: 14pt">
         <p><xsl:value-of select="description"/> </p>
         <span style="margin-left: 480px;"><img><xsl:attribute name="src"><xsl:value-of select="pic"/></xsl:attribute></img> </span>    
         </div>       
   </xsl:for-each>
</body>
</html>
