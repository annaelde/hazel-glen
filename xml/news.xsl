<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:template match="/">
		<xsl:for-each select="/news/article">
			<xsl:sort select="sortDate" order="descending"/>
				<div>
					<h2><xsl:value-of select="title" /></h2>
					<img class="full-image" src="{image}" height="300" width="580" alt="{imageDesc}"/>
					<img class="mobile-image" src="{image}" height="155" width="300" alt="{imageDesc}"/>
					<h3><xsl:value-of select="headline" /></h3>
					<h4>By <xsl:value-of select="author" /> | Published <xsl:value-of select="date" /></h4>
					<p><xsl:value-of select="content" /></p>
				</div>
				<xsl:if test="not(position()=last())">
					<div class="separator-container"><img class="separator-const" src="./images/separator.svg" aria-hidden="true" alt=""/></div>
				</xsl:if>
		</xsl:for-each>
	</xsl:template>
</xsl:stylesheet>